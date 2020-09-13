<?php
namespace app\controllers;

use app\models\Withdraw;
use app\models\userTotal;
use app\models\adminTotal;
use thecodeholic\phpmvc\Request;
use thecodeholic\phpmvc\Response;
use thecodeholic\phpmvc\Controller;
use thecodeholic\phpmvc\Application;
use thecodeholic\phpmvc\middlewares\AdminMiddleware;


class adminWithdrawController extends Controller
{
    public function __construct()
    {
        $this->registerMiddleware(new AdminMiddleware(['dashboard']));
    }
    public function withdraw()
    {
        $withdrawModel = new Withdraw();
      
        $withdraws = $withdrawModel->findAll();
        $colorArr = [
            'Pending' => 'badge badge-pill badge-warning',
            'Cancelled' => 'badge badge-pill badge-danger',
            'Approved' => 'badge badge-pill badge-primary',
            'Paid' => 'badge badge-pill badge-success',

        ];

        $this->setLayout('adminDash');
        return $this->render('admin/withdraw',[
            'withdraws' => $withdraws,
            'colorArr' => $colorArr

        ]);
    }

    public function update(Request $request, Response $response) 
    {
        $withdrawUpdate = new Withdraw();
        if ($request->getMethod() === 'post') {
            $data = $request->getBody();
            $arr = [
                'id' => $data['id']
            ]; 
            // echo "<pre>";
            // var_dump($data);
            // exit;
            // echo "</pre>"; 

            $updateData = [
                'status' => $data['status']
            ];
 
            if ($withdrawUpdate->update($updateData,  $arr)) {
                Application::$app->session->setFlash('success', 'You have successfully updated the detail ');
                $this->addTotal($data['user_id'], $data['status'], $data['amount'], $arr);
                $response->redirect('/admin/withdraw');   
            }
           
        }
    }

     public function addTotal($user_id, $status, $amount, $arr = [])
   {
        $total = new userTotal();
        $adminTotal = new adminTotal();
        
        $getTotal = $total::findOne(['user_id' => $user_id]);
        $getAdminTotal = $adminTotal::findOne(['id' => 1]);

        if ($status == "Paid") {

            $totalAmountWithdrawn = $getTotal->total_amount_withdrawn + $amount;
            $adminTotalWithdrawal = $getAdminTotal->total_withdrawal + $amount;
          
            $updateData1 = [
                'total_amount_withdrawn' => $totalAmountWithdrawn
            ];

            $updateData2 = [
                'total_withdrawal' => $adminTotalWithdrawal
            ];

           
            if ($total->update($updateData1, $arr) && $adminTotal->update($updateData2, ['id' => $getAdminTotal->id])) {
                
            }
        }else {

            if ($getTotal->total_amount_withdrawn != 0 && $getAdminTotal->total_withdrawal != 0) {
               
                $totalAmountWithdrawn = $getTotal->total_amount_withdrawn - $amount;
                $adminTotalWithdrawal = $getAdminTotal->total_withdrawal - $amount;
                
                $updateData = [
                    'total_amount_withdrawn' => $totalAmountWithdrawn
                ];

                $updateData2 = [
                    'total_withdrawal' => $adminTotalWithdrawal
                ];
                if ($total->update($updateData, $arr) && $adminTotal->update($updateData2, ['id' => $getAdminTotal->id])) {
                   
                }
            }
        } 
       
   }
}

?>

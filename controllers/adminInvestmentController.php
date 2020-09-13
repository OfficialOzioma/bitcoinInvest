<?php
namespace app\controllers;

use app\models\userTotal;
use app\models\adminTotal;
use app\models\Investment;
use thecodeholic\phpmvc\Request;
use thecodeholic\phpmvc\Response;
use thecodeholic\phpmvc\Controller;
use thecodeholic\phpmvc\Application;
use thecodeholic\phpmvc\middlewares\AdminMiddleware;

class adminInvestmentController extends Controller
{
    public function __construct()
    {
        $this->registerMiddleware(new AdminMiddleware(['dashboard']));
    }
    
   public function investment()
   {
        $investmentModel = new Investment();
        $investments = $investmentModel->findAll();
        $colorArr = [
            'Pending' => 'badge badge-pill badge-warning',
            'Cancelled' => 'badge badge-pill badge-danger',
            'Approved' => 'badge badge-pill badge-success'
        ];
        $this->setLayout('adminDash');
        return $this->render('admin/investments',[
            'investments' => $investments,
            'colorArr' => $colorArr
        ]); 
   } 
   public function update(Request $request, Response $response)
   {
        $investmentUpdate = new Investment();
        if ($request->getMethod() === 'post') {
            $data = $request->getBody();

            // echo "<pre>";
            // var_dump($data['user_id']);
            // exit;
            // echo "</pre>";

            $updateData = [
                'status' => $data['status']
            ];

            $arr = [
                'id' => $data['id']
            ];
             
            if ($investmentUpdate->update($updateData,  $arr)) {
                Application::$app->session->setFlash('success', 'You have successfully updated the detail ');
                $this->addTotal($data['user_id'], $data['status'], $data['amountInvest'],$data['earn'], $arr);
                $response->redirect('/admin/investments');   
            }
           
        }
        
   }

   public function addTotal($user_id, $status, $amountInvested, $earnedAmount, $arr = [])
   {
        $total = new userTotal();
        $adminTotal = new adminTotal();
        
        $getTotal = $total::findOne(['user_id' => $user_id]);
        $getAdminTotal = $adminTotal::findOne(['id' => 1]);

        if ($status == "Approved") {

            $totalAmountInvested = $getTotal->total_amount_invested + $amountInvested;
            $totalAmountEarned = $getTotal->Total_amount_earned + $earnedAmount;
            $adminTotalInvestment = $getAdminTotal->total_investments + $amountInvested;

            $updateData1 = [
                'Total_amount_earned' => $totalAmountEarned,
                'total_amount_invested' => $totalAmountInvested
            ];

            $updateData2 = [
                'total_investments' => $adminTotalInvestment
            ];
            
                // echo "<pre>";
                // var_dump($getAdminTotal);
                // echo "</pre>";
                // exit;

            if ($total->update($updateData1, $arr) && $adminTotal->update($updateData2, ['id' => 1])) {
               
            }
        }else {

            if ($getTotal->total_amount_invested != 0 && $getTotal->Total_amount_earned != 0) {
               
                $totalAmountInvested = $getTotal->total_amount_invested - $amountInvested;
                $totalAmountEarned = $getTotal->Total_amount_earned - $earnedAmount;
                $adminTotalInvestment = $getAdminTotal->total_investments - $amountInvested;

                $updateData = [
                    'Total_amount_earned' => $totalAmountEarned,
                    'total_amount_invested' => $totalAmountInvested
                ];

                $updateData2 = [
                    'total_investments' => $adminTotalInvestment
                ];

                if ($total->update($updateData, $arr) && $adminTotal->update($updateData2, ['id' => 1])) {
                   
                }
            }
        } 
       
   }
}

?>
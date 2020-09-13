var mysql = require('mysql');

var con = mysql.createConnection({
  host: "localhost",
  user: "root",
  password: "1200safeguarding",
  insecureAuth : true
});

con.connect(function(err) {
  if (err) throw err;
  console.log("Connected!");
});
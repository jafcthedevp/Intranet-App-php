const mysql = require('mysql')
const conection = mysql.createConnection({
    host:'localhost',
    usuarios:'Jesus',
    password:'Virtual21',
    database:'2'
})

conection.connect((err) =>{
    if(err) throw err
    console.log('La conexión funciona')
})

conection.end()
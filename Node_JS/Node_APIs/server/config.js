const mysql = require("mysql");

const conn = mysql.createConnection({
    host: "localhost",
    user: "root",
    password: "",
    database: "node_js_api"
});

module.exports = conn;

// conn.query("SELECT * FROM users", (err, data, col) => {
//     if(err) return;
//     console.log(data);
// });

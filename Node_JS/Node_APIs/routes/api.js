const express = require("express");
const db_conn = require("../server/config");
const jwt = require("jsonwebtoken");

const router = express.Router();

// middelware token verify
const checkToken = (req, res, next) => {
    jwt.verify(req.headers.authorization, 'secret', function(err, decoded) {
        if (err) {
            err = {
              name: 'TokenExpiredError',
              message: 'jwt expired',
              expiredAt: 1408621000
            };
            res.send(err);
          
        } else {
            next();
        }
      });
}

// register
router.post("/login", (req, res) => {
    const user = [req.body.email,req.body.password];
    db_conn.query("SELECT * FROM users Where email = ? AND password = ?", user, (err, data, col) => {
        if(err) {
            res.send({msg: "Error in query"}); 
            return;
        }

        if(data.length == 0) {
            res.send({msg: "User not found"}); 
            return;
        } else {

        }

        var token = jwt.sign({
            exp: Math.floor(Date.now() / 1000) + (60 * 60),
            data: data[0]
          }, 'secret');
        console.log(token);
        res.send(data[0]);
    });
    // res.send({msg: "Record Added"});
});

// login
router.post("/register", (req, res) => {
    const user = {
        name: req.body.name,
        email: req.body.email,
        password: req.body.password
    }
    db_conn.query("INSERT INTO users SET ?", user, (err, data, col) => {
        if(err) {
            res.send({msg: "Error in query"}); 
            return;
        }
        // res.send(data);
    });
    res.send({msg: "Record Added"});
});

// get data
router.get("/",checkToken, (req, res) => {
    db_conn.query("SELECT * FROM users", (err, data, col) => {
        if(err) {
            res.send({msg: "Error in query"}); 
            return;
        }
        res.send(data);
    });
});

module.exports = router;
const express = require("express");
const expressLayouts = require('express-ejs-layouts')
const { MongoClient } = require("mongodb");

// app variable
const app = express();
// at port
const port = 3000;

// Router
const router = express.Router();

// db config
const DB_URI = 'mongodb://127.0.0.1:27017/';
const dbName = 'users_api';
const client = new MongoClient(DB_URI);

// db connection
const main = async (formData) => {
    await client.connect();
    const db = client.db(dbName);
    const collection = db.collection('users');
    collection.insertOne(formData);
    return collection.find().toArray();
}

// load static files
app.use(express.static("html"));
app.use(express.static("public"));

// json
app.use(express.json());

// get form data
app.use(express.urlencoded( { extended: true } ));

// set template engine
app.use(expressLayouts)
app.set('layout', './layouts/app');
app.set('view engine', 'ejs')

// middlewares (global, route, group)
// global
const globalM = (req, res, next) => {
    console.log('in middleware');
    next();
};

// set middleware
// app.use(globalM);

// routes
app.get("/", globalM,  (req, res) => {
    res.send("<h1>Home</h1>")    
});

app.get("/register", (req, res) => {
    res.render("register");
})

app.get("/list", (req, res) => {
    const users = [
        {id: 1, name: "Farhan", email: "farhan@m.com"},
        {id: 2, name: "Ahmad", email: "ahmad@m.com"}
    ];
    res.render("list-user", {usersList: users});
});

app.get("/view-user/:id/:name", (req, res) => {
    res.send("view-user", req.params);
})

app.post("/register", (req, res) => {
    // console.log(req.body);
    main(req.body).then( data => {
        res.send(data);
    } )
});

app.get("/login", (req, res) => {
    res.send("login");
});

// use group routing
router.use( (req, res, next) => {
    console.log('in group midd');
    next();
} )

router.get("/p1", (req, res) => {
    res.send("page one");
});
router.get("/p2", (req, res) => {
    res.send("page two");
});
router.get("/p3", (req, res) => {
    res.send("page three");
});

app.use("/", router);


// server starting function
app.listen(port, () => {
    console.log(`Listening at port: ${port}`);
});
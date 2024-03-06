const express = require("express");
const expressLayouts = require("express-ejs-layouts");
const session = require("express-session");
require("./server/config");

const app = express();
const PORT = 3000;

// default engine
app.set("view engine", "ejs");
app.use(expressLayouts);
app.set('layout', './layouts/app');

// load static files
app.use(express.static("public"));

// form submit
app.use(express.urlencoded({extended: true}));
app.use(express.json());

// local variables
app.use( (req, res, next) => {
    app.locals = {
        msg: "",
        setUser: {id: 0, name: "Guest"}
    }
    next();
} );

// session management
app.use(session({
    secret: "userLogin",
    name: "userLogin",
    resave: true,
    saveUninitialized: true,
    cookie: {
        maxAge: 1000 * 60 * 60 // 1 hour
    }
}));

app.get("/", (req, res) => {
    data = {
        id: 1, name: "Farhan"
    };
    res.render("index", data);
});

// user routes
app.use("/", require('./routes/user'));

app.listen(PORT, () => {
    console.log(`Listening at Port: ${PORT}`);
});


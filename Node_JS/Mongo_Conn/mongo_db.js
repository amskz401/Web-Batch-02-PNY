const express = require("express");
const { MongoClient } = require("mongodb");

// app variable
const app = express();
// at port
const port = 3000;

// database configuration
const DB_URI = 'mongodb://127.0.0.1:27017/';
const dbName = 'users_api';
const client = new MongoClient(DB_URI);

async function main() {
    // Use connect method to connect to the server
    await client.connect();
    console.log('Connected successfully to server');
    const db = client.db(dbName);
    const collection = db.collection('users');

    // the following code examples can be pasted here...
    const insertResult = await collection.insertMany([{ a: 1 }, { a: 2 }, { a: 3 }]);
    return collection.find({}).toArray();
    // return 'done.';
}



// routes
app.get("/", (req, res) => {
    main().then( data => {
        console.log(data);
        res.send(data)
    } )
    
})

// server starting function
app.listen(port, () => {
    console.log(`Listening at port: ${port}`);
});
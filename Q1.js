// Name : Shubham Sapkal Roll no. 2012118

// Program to show current date and time using user defined module

const fs = require("fs");

var today = new Date();

const name = process.argv[2];

fs.mkdirSync(name);

console.log("The Current Date and Time is : " + today);

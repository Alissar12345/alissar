const mysql = require('mysql');

// Create a connection to the database
const connection = mysql.createConnection({
  host: 'localhost',    // Replace with your database host
  user: 'root',         // Replace with your database username
  password: '',         // Replace with your database password
  database: 'alissar'   // Replace with your database name
});

// Connect to the database
connection.connect((err) => {
  if (err) {
    console.error('Error connecting to the database:', err);
    return;
  }
  console.log('Connected to the database.');
});

  // document.getElementById('signup-form').addEventListener('submit', function(event) {
 //   event.preventDefault(); // Prevent the form from submitting the default way
    
 /* Get the form values
    var username = document.getElementById('username').value;
    var email = document.getElementById('email').value;
    var password = document.getElementById('password').value;

    // Basic validation
    if (username === '' || email === '' || password === '') {
        alert('All fields are required.');
        return;
    }*/

// Define the variables
const username = 'john_doe';
const email = 'john.doe@example.com';
const password = 'securepassword';

// Create an INSERT query with placeholders
const query = 'INSERT INTO registration (username, email, password) VALUES (?,?,?)';
connection.query(query, [username, email, password], (err, results) => {
    if (err) {
      console.error('Error executing query:', err);
      return;
    }
    console.log('Data inserted:', results);
  });




   window.location="home.php"
    // Optionally, reset the form
    document.getElementById('signup-form').reset();
//});

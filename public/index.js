// Initialize Firebase
var config = {
    apiKey: "AIzaSyAtcTdd2y5gK2Glm-HFXHNAdhi3is3sUCc",
    authDomain: "dell-cmad.firebaseapp.com",
    databaseURL: "https://dell-cmad.firebaseio.com",
    projectId: "dell-cmad",
    storageBucket: "dell-cmad.appspot.com",
    messagingSenderId: "887760444120"
};
firebase.initializeApp(config);

// User login function
function login() {
    var userEmail = document.getElementById('email_field').value;
    var userPwd = document.getElementById('pwd_field').value;

    firebase.auth().signInWithEmailAndPassword(userEmail, userPwd)
    .then(function (user) {
        // Handle Errors here.
    //    console.log("successfully logged in");
       window.location.href="successfulllogin.html";
        // window.alert("Error code: " + errorCode + "\nError message: " + errorMessage);
    })
    .catch(function (error) {
        // Handle Errors here.
        var errorCode = error.code;
        var errorMessage = error.message;
        window.alert("Error code: " + errorCode + "\nError message: " + errorMessage);
    });
}

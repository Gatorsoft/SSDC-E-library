function b1() {

    window.location.href = "home1.php";
    
}
function sendEmail() {
    // Define email details
    const recipient = "gratorsoftemail@gmail.com.com";
    const subject = "Welcome from Java Institute E-Lbrary";
    const body = "This is the initialized content for your email.\n\nBest regards,\n[Your Name]";
    
    // Encode subject and body to make them URL-safe
    const mailtoLink = `mailto:${recipient}?subject=${encodeURIComponent(subject)}&body=${encodeURIComponent(body)}`;
    
    // Open the email client
    window.location.href = mailtoLink;
}

function goToLibrary(){
    window.location = "library.php";
}
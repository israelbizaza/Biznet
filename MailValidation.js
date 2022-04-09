let MailRegex = /^[a-zA-Z\S]+$/;

let MailValidationFunction = (e) =>{
    
    


    
    const myForm = document.querySelector("#myForm");
    const Fname = document.forms['myForm']['fname'].value;
    const Lname = document.forms['myForm']['lname'].value;

    myForm.addEventListener("submit", ()=>{
        // if (MailRegex.test(Fname) === false) {

        //     alert('string');
        //     return false;
            
        // }
        console.log("test");
    })
}
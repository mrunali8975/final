const name = document.getElementById("fname");

const email = document.getElementById("email");
const phone = document.getElementById("phone");
let namevalid = false;
let emailvalid = false;
let phonevalid = false;


name.addEventListener('blur', () => {
    console.log("name is blur");
    //validation for name
    let regex = /^[a-zA-Z]([0-9a-zA-Z]){2,20}$/;
    let str = name.value;
    console.log(regex, str);
    if (regex.test(str)) {
        console.log("it is matched");
        name.classList.remove('is-invalid');
        namevalid = true;


    } else {
        console.log("it is not matched");
        name.classList.add('is-invalid');
        namevalid = false;
    }
})




email.addEventListener('blur', () => {
    console.log("name is blur");
    let regex = /^([_\-\.0-9a-zA-Z]+)@([_\-\.0-9a-zA-Z]+)\.([a-zA-Z]){2,7}$/;
    let str = email.value;
    console.log(regex, str);
    if (regex.test(str)) {
        console.log("your email is valid");
        email.classList.remove('is-invalid');
        emailvalid = true;

    } else {
        console.log("it is not matchedemail is not valid");
        email.classList.add('is-invalid');
        emailvalid = false;
    }
})

phone.addEventListener('blur', () => {
    console.log("name is blur");
    let regex = /^([0-9]){10}$/;
    let str = phone.value;
    console.log(regex, str);
    if (regex.test(str)) {
        console.log("your phone is valid");
        phone.classList.remove('is-invalid');
        phonevalid = true


    } else {
        console.log("your  phone number  is not valid");
        phone.classList.add('is-invalid');
        phonevalid = false;
    }
})
let submit = document.getElementById('submit');
submit.addEventListener('click', (e) => {
    e.preventDefault();
    if (namevalid && emailvalid && phonevalid) {
        let success = document.getElementById('success');
        let failure = document.getElementById('failure');

        success.classList.add('show')
            // $('#failure').alert('close');
        $('#failure').hide();
        $('#success').show();

        console.log('all are valid')


    } else {
        let failure = document.getElementById('failure');
        failure.classList.add('show')
            // $('#success').alert('hide');
        $('#success').hide();
        $('#failure').show();

        console.log('one of the phone or email or name is invalid')


    }

})
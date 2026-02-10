function valid()
{
    // if(document.frm.fname.value=='')
    // {
    //     alert('Please fill your FirstName')
    //     document.frm.fname.focus();
    //     return false;
    // }

    if(document.frm.fname.value=='')
    {
        // alert('Please fill your FirstName')
        document.getElementById("error").innerHTML='Plese fill your firstName';
        document.frm.fname.focus();
        return false;
    }
    var f=/^[A-Za-z]+$/;
    if(!f.test(document.frm.fname.value))
    {
        alert('Please fill your firstname alphabetic character Only')
        document.frm.fname.focus();
        return false;
    }
    if(document.frm.lname.value=='')
    {
        alert('Please fill your LastName')
        document.frm.lname.focus();
        return false;
    }
    var l=/^[A-Za-z]+$/;
    if(!l.test(document.frm.lname.value))
    {
        alert('Please fill your lastname alphabetic character Only')
        document.frm.lname.focus();
        return false;
    }

    if(document.frm.email.value=='')
    {
        alert('Please fill your email')
        document.frm.email.focus();
        return false;
    }
    var em=/^(([^<>()[\]\.,;:\s@\"]+(\.[^<>()[\]\.,;:\s@\"]+)*)|(\".+\"))@(([^<>()[\]\.,;:\s@\"]+\.)+[^<>()[\]\.,;:\s@\"]{2,})$/i;
    if(!em.test(document.frm.email.value))
    {
        alert('Please fill your valid email address')
        document.frm.email.focus();
        return false;
    }

    if(document.frm.pass.value=='')
    {
        alert('Please fill your Password')
        document.frm.pass.focus();
        return false;
    }
}
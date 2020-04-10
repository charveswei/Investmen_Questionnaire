function ansimg(ans){
				
    switch (Math.floor(ans/10)){
        case 1:
        case 6:
        case 11:
        case 16:
        case 21:
        case 26:           
            if(ans != check1)
            {
                document.getElementById(check1).src='./img/no.png';
            }
            document.getElementById(ans).src='./img/yes.png';
            document.getElementById(Math.floor(ans/10)).value=ans%10;
            check1 = ans;
            break;
        case 2:
        case 7:
        case 12:
        case 17:
        case 22:
        case 27:
            if(ans != check2)
            {
                document.getElementById(check2).src='./img/no.png';
            }
            document.getElementById(ans).src='./img/yes.png';
            document.getElementById(Math.floor(ans/10)).value=ans%10;
            check2 = ans;
            break;
        case 3:
        case 8:
        case 13:
        case 18:
        case 23:
        case 28:
            if(ans != check3)
            {
                document.getElementById(check3).src='./img/no.png';
            }
            document.getElementById(ans).src='./img/yes.png';
            document.getElementById(Math.floor(ans/10)).value=ans%10;
            check3 = ans;
            break;
        case 4:
        case 9:
        case 14:
        case 19:
        case 24:
        case 29:
            if(ans != check4)
            {
                document.getElementById(check4).src='./img/no.png';
            }
            document.getElementById(ans).src='./img/yes.png';
            document.getElementById(Math.floor(ans/10)).value=ans%10;
            check4 = ans;
            break;
        case 5:
        case 10:
        case 15:
        case 20:
        case 25:
        case 30:
            if(ans != check5)
            {
                document.getElementById(check5).src='./img/no.png';
            }
            document.getElementById(ans).src='./img/yes.png';
            document.getElementById(Math.floor(ans/10)).value=ans%10;
            check5 = ans;
            

    }
    
}
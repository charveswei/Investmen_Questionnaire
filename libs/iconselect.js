function icon(iconselect){
  
    switch (iconselect){
        case 1:
            
            document.getElementById("radericon").src='./img/icon/icon-01.png';
            document.getElementById("investmenticon").src='./img/icon/icon-06.png';
            document.getElementById("celebrityicon").src='./img/icon/icon-07.png';
            document.getElementById("learnicon").src='./img/icon/icon-08.png';
            document.getElementById("rader").style.display="";
            document.getElementById("investment").style.display="none";
            document.getElementById("celebrity").style.display="none";
            document.getElementById("learn").style.display="none";
            document.getElementById("background").style.backgroundImage='url("./img/answerbackground.png")';
            break;
        case 2:
            document.getElementById("radericon").src='./img/icon/icon-05.png';
            document.getElementById("investmenticon").src='./img/icon/icon-02.png';
            document.getElementById("celebrityicon").src='./img/icon/icon-07.png';
            document.getElementById("learnicon").src='./img/icon/icon-08.png';
            document.getElementById("rader").style.display="none";
            document.getElementById("investment").style.display="";
            document.getElementById("celebrity").style.display="none";
            document.getElementById("learn").style.display="none";
            document.getElementById("background").style.backgroundImage='url("./img/investment.png")';
            break;
        case 3:
            document.getElementById("radericon").src='./img/icon/icon-05.png';
            document.getElementById("investmenticon").src='./img/icon/icon-06.png';
            document.getElementById("celebrityicon").src='./img/icon/icon-03.png';
            document.getElementById("learnicon").src='./img/icon/icon-08.png';
            document.getElementById("rader").style.display="none";
            document.getElementById("investment").style.display="none";
            document.getElementById("celebrity").style.display="";
            document.getElementById("learn").style.display="none";
            document.getElementById("background").style.backgroundImage='url("./img/celebrity.png")';
            break;
        case 4:
            document.getElementById("radericon").src='./img/icon/icon-05.png';
            document.getElementById("investmenticon").src='./img/icon/icon-06.png';
            document.getElementById("celebrityicon").src='./img/icon/icon-07.png';
            document.getElementById("learnicon").src='./img/icon/icon-04.png';
            document.getElementById("rader").style.display="none";
            document.getElementById("investment").style.display="none";
            document.getElementById("celebrity").style.display="none";
            document.getElementById("learn").style.display="";
            document.getElementById("background").style.backgroundImage='url("./img/learn.png")';
            break;
    }
}
const main = document.querySelector("main");


const par1 = document.querySelector("#par2");

par1.addEventListener("click", e =>  {
    const info = `<div class="cont"><div> <p>Cześć, nazywam się Rafał i uczę się programować :D<br> Moje hobby to żonglowanie oraz nauka programowania. <br> lubię również jeździć na rowerze :)</p> <br> <br> <a href="index.php"> Powrót do strony głównej</a></div></div>`

    main.innerHTML=(info) ;
    
});
const par2 = document.querySelector("#par3");

par2.addEventListener("click", e =>  {
    const info = `<div class="cont"><div> <p>Rafał Wojciechowski <br> <br>email: R.P.Wojciechowski10@gmail.com </p> <br> <br> <a href="index.php"> Powrót do strony głównej</a></div></div>`

    main.innerHTML=(info) ;
    
});

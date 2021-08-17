const main = document.querySelector("main");


const par1 = document.querySelector("#par2");

par1.addEventListener("click", e =>  {
    const info = `<div> hello</div> <a href="index.php"> Powrót do strony głównej</a>`

    main.innerHTML=(info) ;
    
});
const par2 = document.querySelector("#par3");

par2.addEventListener("click", e =>  {
    const info = `<div> hello</div> <a href="index.php"> Powrót do strony głównej</a>`

    main.innerHTML=(info) ;
    
});

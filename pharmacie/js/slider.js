let slide = new Array(  "images/img3.png",
                        "images/img8.jpg",
                        "images/img1.png",
                        "images/img0.jpg",
                        
                        "images/img4.jpg"
                    );
let numero = 0;

function changeSlide(sens) {
    let img=document.getElementById("slide");
    numero = numero + sens;
    if (numero > slide.length - 1) {
        numero = 0;
    }
    img.src = slide[numero];
    // console.log(slide[numero])
}
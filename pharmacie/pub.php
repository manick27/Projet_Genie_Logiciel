<?php 
    require_once "functions.php";
    if(verifCon()){
?>
<section id="secPub">
<?php
    }
    else{
?>
<section id="section2">
<?php
    }
?>
		<div>
            <?php 
            if(!verifCon()){ 
            ?>
			    <p>3NPharma vous garantit une très bonne qualité de vos produits et respecte les règles fixées par le Minitère de la santé du Cameroun</p>
            <?php
            }
            ?>
            <div>
				<span>
					<h1><span id="pour">100%</span></h1>
					<p>D'efficacité</p>
				</span>
				<span class="">
					<h1><span id="heure">60 min</span></h1>
					<p>temps moyen pour recupérer votre produit</p>
				</span>
			</div>
			<div>
				<span class="">
					<h1><span id="ref">5 cent mille</span></h1>
					<p>Produits référencés dans notre pharmacie</p>
				</span>
				<span class="">
					<h1><span id="note">4,6</span><sub>/5</sub></h1>
					<p>Note moyenne attribuée par nos Clients</p>
				</span>
			</div>
		</div>
	</section>
    <script>
        var p = 50, h = 60, r = 1000, n1 = 2, n2 = 0;
            // alert("ghjn,n")
            document.querySelector('#ref').innerHTML= r
            document.querySelector('#pour').innerHTML='+'+ p + '%'
            document.querySelector('body').addEventListener('mouseover', function () {
                setInterval(function () {
                    p++;
                    h--;
                    r++;
                    n2++;
                    // alert(n);
                    if(p<101){
                        document.querySelector('#pour').innerHTML='+'+ p + '%'
                    }
                    else{
                        p=50;
                    }

                    if(h>0){
                        document.querySelector('#heure').innerHTML='-'+ h + 'min'
                    }
                    else{
                        h=60
                    }

                    if(r < 3001){
                        document.querySelector('#ref').innerHTML= r
                    }
                    else{
                        r=100;
                    }

                    if(n2 < 10){
                        document.querySelector('#note').innerHTML= n1 + ',' + n2
                    }
                    else{
                        n1++;
                        n2 = 0;
                    }

                    if(n1 == 5){
                        n1 = 2;
                    }
                }, 3000)
            })
    </script>
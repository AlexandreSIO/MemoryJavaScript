<!doctype html>

	<title>Alexandre BERNADAC est divin</title>

	<h1>Alexandre <3<3<3</h1>
	
	<body>

			<canvas id="CanvasDivin" width="900" height="800" style="border:2px solid purple">
				Ah! Ca ne marche pas.
			</canvas>
			
			<script>
			
				var leCanvas=document.getElementById('CanvasDivin');
				var leContext=leCanvas.getContext('2d');
				
				var imagette1=new Image();
				var imagette2=new Image();
				var imagette3=new Image();
				var imagette4=new Image();
				var imagette5=new Image();
				var imagette6=new Image();
				var imagetteSpe=new Image();
				var lesImages=new Array(6);
				
				function alea(nbrmax)
				{
					return Math.floor(Math.random()*nbrmax)+1;
				}
				
				function tirage()
				{
					
					lesImages[0]=alea(5); 
					lesImages[1]=alea(5);
					lesImages[2]=alea(5);
					lesImages[3]=alea(5);
					lesImages[4]=alea(5);
					lesImages[5]=alea(5);
				}
				
				function imageRND()
				{
					imagette1.src= "/TestJS/" + lesImages[0] + ".jpg";
					imagette2.src= "/TestJS/" + lesImages[1] + ".jpg";
					imagette3.src= "/TestJS/" + lesImages[2] + ".jpg";
					imagette4.src= "/TestJS/" + lesImages[3] + ".jpg";
					imagette5.src= "/TestJS/" + lesImages[4] + ".jpg";
					imagette6.src= "/TestJS/" + lesImages[5] + ".jpg";
					
					imagette1.onload = function (){leContext.drawImage(imagette1, 10, 50);};
					imagette2.onload = function (){leContext.drawImage(imagette2, 300, 50);};
					imagette3.onload = function (){leContext.drawImage(imagette3, 590, 50);};
					imagette4.onload = function (){leContext.drawImage(imagette4, 10, 250);};
					imagette5.onload = function (){leContext.drawImage(imagette5, 300, 250);};
					imagette6.onload = function (){leContext.drawImage(imagette6, 590, 250);};
				}
				
				tirage();
				
				imageRND();
				
				if(lesImages[0]==3 && lesImages[1]==3 && lesImages[2]==3)
				{
					alert("Ciao!");
				}
				
				if(lesImages[0]==4 && lesImages[3]==4)
				{
					alert("La tuture");
				}
				
				if(lesImages[0]==1 && lesImages[4]==1 && lesImages[2]==1)
				{
					alert("C'est beau!");
				}
				
				if(lesImages[0]==5 && lesImages[4]==5 && lesImages[2]==5 && lesImages[1]==5)
				{
					alert("La chancla");
				}
			
			</script>
			
	</body>
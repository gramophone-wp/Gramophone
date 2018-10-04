 <html> 
  <head> 
    <title> Form Login Type 1 </title> 
    <link href="style1.css" rel="stylesheet" type="text/css" > 
	  <style>
		 *{ 
			  padding: 0px; 
			  margin: 0px; 
			} 

			#utama { 
			background-image: url("http://berbagaigadget.com/wp-content/uploads/2017/06/Wallpaper-Club-Sepak-Bola-Keren-3.jpg"); 
			background-size: cover; 
			height: 680px; 
			} 

			.header_isi { 
			  width: 335px; 
			  height: 230px; 
			  padding: 180px 0px 90px 480px; 
			} 

			.gambar { 
			  background-color: rgba(170, 114, 123 ,0.6); 
			  height: 330px; 
			  border: 2px solid rgba(170, 114, 123 ,1); 
			} 

			img { 
			  width: 250px; 
			  height: 100px; 
			  margin-left: 45px; 
			  margin-top: 15px; 
			} 

			.login_regis { 
			  height: 40px; 
			  width: 260px; 
			  text-align: center; 
			  color: white; 
			  font-size: 17px; 
			  border-radius: 8px; 
			  background-color: rgba(225, 255, 255, 0.4); 
			  border: 3px solid #0288D1; 
			  margin-left: 42px; 
			  margin-top: 10px; 
			} 

			.tombol_login { 
			  width: 260px; 
			  height: 30px; 
			  text-align: center; 
			  background-color: #0288D1; 
			  color: white; 
			  font-size: 17px; 
			  border: 2px solid #0288D1; 
			  border-radius: 8px; 
			  margin-top: 20px; 
			  margin-left: 42px; 
			} 

			.chexbox { 
			  font-size: 15px; 
			  color: white; 
			  margin-left: 45px; 
			  margin-top: 10px; 
			} 

			.login_regis:hover { 
			  border: 3px solid #fff; 
			} 

			.tombol_login:hover { 
			  background-color: white; 
			  color: #0288D1; 
			  border: 2px solid white; 
			} 

			.copyright { 
			  margin-top: 150px; 
			  color: #0288D1; 
			  font-size: 17px; 
			  margin-left: 10px; 
			} 

			a { 
			  text-decoration: none; 
			  color: black; 
			} 

			.copyright a { 
			  color: #0288D1; 
			}
		</style
  </head> 

  <body> 
    <div id="utama"> 

      <div class="header"> 

        <div class="header_isi"> 

          <div class="gambar"> 

            <form action="login.php" method="POST"> 
              <img src="https://plus.google.com/u/0/photos/115662289679139849091/albums/profile/6411845732624653666?iso=false" ><br /><br /> 

              <input type="text" name="username" placeholder="Username" class="login_regis">     <br /> 
              <input type="password" name="password" placeholder="Password" class="login_regis"> <br /> 

            <div class="chexbox"> 
              <input type="checkbox" name="chek" > Remember me <br /> 
            </div> 

              <input type="Submit" name="login" value="LOGIN" class="tombol_login"> 
            </form> 

        </div> 

      </div> 

      <div class="copyright"> 
        CopyRight&copy 2018 | Design By: <a href="codeuser.blogspot.com"> Code User </a> | City : Bandar Lampung. 
      </div> 
    </div> 
  </body> 
</html>

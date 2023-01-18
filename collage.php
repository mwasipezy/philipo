<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />

    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsivehome.css">
      <script src="js/main.js"></script>
      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://www.paypal.com/sdk/js?client-id=AU9hxEoTlk8NbYhJ1saWeH6zXmAs-U0IibrA2bbPl1-8ikUusxGEk-H5OCti9OV-qc73df2dwNFZFTeo&currency=USD" data-sdk-integration-source="button-factory"></script>
        
        <title>culltek | softeware solutions</title>
    </head>
    <body>
    <section id="check-section">
    </section>

<section class="home">
        <!-- Navbar -->
            <div class="homefrost">
                <header class="header">
                        <a href="#" class="logo"><img src="img/logo.jpg" alt="" srcset=""></a>
                        <input class="menu-btn" type="checkbox" id="menu-btn" />
                        <label class="menu-icon" for="menu-btn"><span class="nav-icon"></span></label>
                        <ul class="menu">
                            <div class="li">
                                <li><a href="index.php" >Home</a></li>
                                <li><a href="about.php">About us</a></li>
                                <li><a href="#" class="active">Students</a></li>
                                <li><a href="enterprise.php">Enterprise</a></li>                    
                                <li><a href="contact.php">Contacts</a></li>
                            </div>
                        </ul>
                </header>
                <div class="confirm-download">  
                    <div class="alert center-text" id="alerts">
                            <label for="" id="alerter"></label>
                        </div>                                           
                    <form index="student" id="student" onsubmit="return false">   
                    confirm wheather the project you are looking for is already at your school                               
                    <div class="form-control">
                            <input type="text" Placeholder="Univerty/collage" id="school" class="inputs">
                        </div>
                        <div class="form-control">
                            <input type="email" Placeholder="Enter your email" id="email" class="inputs">                          
                        </div>
                        <div class="form-control">
                            <select id="year" name="yr">
                                <option value="select">Select year of study</option>
                                <option value="1">Year 1</option>
                                <option value="2">Year 2</option>
                                <option value="3">Year 3</option>
                                <option value="4">Year 4</option>
                            </select>          
                        </div>
                        <div class="form-control">
                            <select id="course">
                                <option value="course">Select course</option>
                                <option value="1">IT</option>
                                <option value="2">Computer Science</option>
                                <option value="2">Computer Engineering</option>
                                <option value="2">Software Engineering</option>
                            </select>                      
                        </div>       
                    <!----------  <input type="submit"  value="Send" class="btn btn-primary">-->
                    <input type="submit" class="btn btn-primary"  value="submit" onclick="saveStudentData('no')" >               
                    </form>
                </div> 
            
            </div>           
        
</section>

     
    <!---------------downloads---------------->
        
    <!--++++++++++++++checkout++++++++++-->
    <form action=""  id="checkoutform">
    <div class="alert pay-alert center-text" id="payments">
                        <label for="" id="pay-alerter">sdwew</label>
                    </div> 
    <label for="" class="closebtn" id="closebtn" onclick="closeForm()">x</label>
    <label id="notid"> </label>
   
        <table class="checkthead tbl"> 
                <thead>                             
                    <th>Project Name</th>
                    <th class="left-align">Price</th>
                    <th><label for=""  id="tot-items"></label></th> 
                </thead>           
        </table>

        <div class="checktbl-scrowlable">
        
        <table class="checkout_tbl tbl1" id="checkout_tbl"> 
        
        </table>
        </div>
        <div class="pricess">
        <div id="paynow">
            <div id="smart-button-container" >
            <div style="text-align: center;">
                <div id="paypal-button-container"></div>
            </div>
            </div>

        </div>
        
            <div class="price-head">
                
                <div class="subtotal">Sub-total</div> 
                <label for="" class="dollar">$</label><label for="" id="money" ></label> 
            </div>
        
           
        </div>
        
    </form>
        <!-- download -->
    <section class="maiwn coll-main">
        
                <div class="alert alert-success">
                <!--  <i class="fas fa-info"></i>0-->
                    <div class="tqry">

                    </div>

                </div>

                <div class="searchbar" > 
                    <input type="search" id="query" name="q" placeholder="Search your project here..." aria-label="Search through site content" onkeyup="search_slns()" >
                    <!--++++++++++++++notification++++++++++-->
                
                    <nav class="notfied" id="gocheckout" onclick="checkme(this)">
                        <button class="notification" name='noti' id="noti" ></button>
                        
                        <h6 class="viewcart">check out</h6>
                        <h6 id="hiddenmsg"></h6>
                    </nav>
                </div>
    
                <div class="contents" > 
                    <form   class="downloadzip" onsubmsit="return false" >
                            <ul class="slns" >
                            
                            <?php
                            
                            $thelist;
                            $br="/";
                            $direc='./downloads/collage';
                            $dirNum=0;
                            $array = [];  
                            if ($handle = opendir($direc)) {
                
                            while (false !== ($file = readdir($handle))) {
                
                                    if ($file != "." && $file != "..") {
                                        $subdir=$direc.$br.$file;
                                        //fetching the first word in a string
                                        $arr = explode(' ',trim($file));
                                        $price=$arr[0];
                                        ////fetching second word
                                        
                                        $prefix =$price;
                                        $index = strpos($file, $prefix) + strlen($prefix);
                                        $file = substr($file, $index);
                
                                        //reading readme.txt
                                        $f="readme.txt";
                                        
                                        $read = file_get_contents($subdir.$br.$f);
                
                                        //getting project size
                                        $size=ceil(dirSize($subdir)/(1024*1024));
                                        if($size>0)
                                        {
                                            $size=$size."mb";
                                        }else{
                                            $size=$size."kb";
                                        }
                                            $btnid='btn'.$dirNum;
                                        ?>
                                            <li  class="sln"> 
                                                <div>
                                                    <h4 name="f"   class="heads" id=<?php echo "head".$dirNum;?>>  <?php echo $file;?></h4>                                           
                                                </div>
                                                    <div class="content-container">
                                                        <div class="row">
                                                            <div class="col">
                                                                <?php  echo "File size: ".$size;?>
                                                            </div> 
                                                            <div class="col">  
                                                                <label for="" class="pricetag" id=<?php echo "price".$dirNum;?>>
                                                                <?php echo $price?>
                                                                </label>
                                                            </div> 
                                                         
                                                    </div>    
                                                   <!-- <div class="no">
                                                       helloo
                                                    </div>-->                                    
                                                    <div class="exists"><!--tick-marks">-->
                                                      
                                                    </div>
                                                    <!-- <div class="exists x-marks">
                                                       
                                                    </div>-->  
                                                <p> <?php echo $read."<br/>";?></p>
                                                <div class="row">
                                                <div class="col">
                                                                    <button type="button" class="cart eyeview" id=<?php echo "view".$dirNum;?>  onclick="sform('<?php echo $file;?>','copyzipz','<?php echo $direc;?>',this.id)"> View </button> 
                                                                </div>
                                                                <div class="col">
                                                                    <input type="button" class="cart" id=<?php echo $dirNum;?> value="Add to cart" onclick="sform('<?php echo $file;?>','copyzip','<?php echo $direc;?>',this.id)"> 
                                                                </div>
                                                            </div>
                                                            </div>
                                            
                                            </li>
                                            
                                            <?php  $thelist="";
                                            //echo '<script type="text/javascript">Styling();</script>';
                                            $dirNum++;
                                            }
                                    }
                                    closedir($handle);
                                    }
                
                                    function dirSize($directory) {
                                        $sizes = 0;
                                        foreach(new RecursiveIteratorIterator(new RecursiveDirectoryIterator($directory)) as $file){
                                            $sizes+=$file->getSize();
                                        }
                                        return $sizes;
                                    } 
                            ?>
                        </ul>
                    </form>
                        
                </div>
                
                
        </section>
        
    <!-- Footer 😪😯 say something am givin up on u😌-->
    <footer class="footer">
            <div class="footer-rows">
                <div class="footer-cols">
                    <div class="coler center-texat logo" >
                    <a href="#" class="logo"><img src="img/logo.jpg" alt="" srcset=""></a>
                    <ul>
                        <div class="follow">Bombolulu, mombasa malindi highway</div>                                  
                       <div class="follow"><b>Phone:  </b><i class="fa fa-phone"></i> +254768317633</div>
			           <div class="follow"><b>Email:  </b><i class="fa fa-envelope-o"></i> info@culltek.com</div>                                 
                    </ul>
                    </div>
                   
                        <div class="coler center-texst links">
                            <div class="footer-head">quick Links</div>
                                <ul>
                                    <li><a href="index.php">Home</a></li>
                                    <li><a href="about.php">About us</a></li>
                                    <li><a href="#">IT Students project</a></li>
                                    <li><a href="enterprise.php">Enterprise solutions</a></li>
                                    <li><a href="contact.php">Contact us</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="coler ">
                            
                            <div class="social  coler center-texst">
                            <div class="footer-head">Follow us</div>
                                <a href="tests.php"><i class="fab fa-github fa-2x"></i></a>
                                <a href="#"><i class="fab fa-github fa-2x"></i></a>
                                <a href="#"><i class="fab fa-facebook fa-2x"></i></a>
                                <a href="#"><i class="fab fa-instagram fa-2x"></i></a>
                                <a href="#"><i class="fab fa-twitter fa-2x"></i></a>
                                  <!---pay now-->
         
 
                                
     </div>
                        </div>
                
            </div>
        
            <div class="center-text copyright">&copy; copyright <?php echo date("Y")?> culltek software solutions and school projects</div>
    </footer>
    
</body>
</html>
<?php
include('header.php');
include('dbcon.php');


?>
<style>
    .room-status{
        display: none;
    }
</style>



<div id="f1" style="background-color:rgba(209,203,203);">
    <h2 class="room-h2"><i class="fas fa-hotel"></i> SEARCH YOUR ROOMS HERE</h2>
         <form action="room.php " method="get"> 
         <center><table >
             <tr>
                 
                <th width="20%" height="50px" required>Check In Date</th>
                 <th width="20%" height="50px" required>Check Out Date</th>
                 <th width="20%" height="50px">Room</th>
                 <td rowspan="2"><input type="submit" name="sub" id="check-btn" value="Check"  ></td>
             </tr>
             <?php
               $r = $_GET['room'];
               $ci=$_GET['ci'];
               $co=$_GET['co'];
         ?>
             <tr>
                
                <td width="20%" height="50px"><center><input type="date" name="ci" required></center></td>
                 <td width="20%" height="50px"><center><input type="date" name="co" required></center></td>
                 <td width="20%" height="50px">
                    <center> <select name="room">
                         <option >1</option>
                         <option >2</option>
                         <option >3</option>
                         <option >4</option>
                         <option >5</option>
                        

                     </select></center>
            </form>
           
                 </td>
             </tr>
         </table></center>
    
        
         <?php
               $qryy="SELECT * FROM `deluxacroom` WHERE `status`='book'";
               $run=mysqli_query($sql,$qryy);
               $row=mysqli_fetch_assoc($run);
               $rno=$row['roomno'];

               $qry="SELECT * FROM `deluxacroom` WHERE `status`='unbook'";
               $run=mysqli_query($sql,$qry);
               $row=mysqli_num_rows($run);
               if($r <= $row)
               {
                   ?>
                   <section id="rooms-right">
                   <div class="paras">
                     <p class="sectionTag">Delux chambre </p>
                     <p class="sectionsubTag g">Status : du chambre </p>
                     <p class="sectionsubTag ">prix par personne : 170 DT</p>
                     <form action="r1.php" method="get">
                     <input type="date" name="ci"  value="<?php echo $ci; ?>" required>
                     <input type="date" name="co"  value="<?php echo $co; ?>" required>
                     <input type="text" name="rt" value="Delux AC" required>
                     <input type="text" name="nr" value="<?php echo $r; ?>" required>
                     <input type="submit" id="room-btn">
                     </form>
                     <br>
                     </div>
                     <div class="thumbnail">
                         <img src="image/ui.jpg" alt="delux" class="imgFluid">
                     </div>
               </section>
                   <?php

               }
               else{
                ?>
                <section id="rooms-right">
            <div class="paras">
               <p class="sectionTag">Delux AB Room</p>
               <p class="sectionsubTag r">Status :not Available </p>
               <p class="sectionsubTag r">Sorry :( Please come another day</p>
            </div>
        
        </section>
         <?php
               }
            ?>
            

             <?php
               $qryy="SELECT * FROM `acroom` WHERE `status`='un book'";
               $run=mysqli_query($sql,$qryy);
               $row=mysqli_fetch_assoc($run);
               $rno=$row['roomno'];

               $qry="SELECT * FROM `acroom` WHERE `status`='un book'";
               $run=mysqli_query($sql,$qry);
               $row=mysqli_num_rows($run);
               if($r = $row)
               {
                   ?>
                   <section id="rooms-right">
                   <div class="paras">
                     <p class="sectionTag">Delux AB Room</p>
                     <p class="sectionsubTag g">Status :Available </p>
                     <p class="sectionsubTag ">Price person room : 180 dt</p>
                     <form action="r2.php" method="get">
                     <input type="date" name="ci"  value="<?php echo $ci; ?>" required>
                     <input type="date" name="co"  value="<?php echo $co; ?>" required>
                     <input type="text" name="rt" value="A.C. Room" required>
                     <input type="text" name="nr" value="<?php echo $r; ?>" required>
                     <input type="submit" id="room-btn">
                     </form>
                     <br>
                     </div>
                     <div class="thumbnail">
                         <img src="image/i6.jpg" alt="delux" class="imgFluid">
                     </div>
               </section>
                   <?php

               }
               else{
                ?>
                <section id="rooms-right">
            <div class="paras">
               <p class="sectionTag">Room</p>
               <p class="sectionsubTag r">Status :not Available </p>
               <p class="sectionsubTag r">Sorry :( Please come another day</p>
            </div>
        
        </section>
         <?php
               }
            ?>
            
             
            


     </div>

    <div class="room-status">

     <section id="rooms-right">
        
    </section>
    <section id="rooms-right">
       
    </section>
    <section id="rooms-right">
        
    </section>
    </div>
    
   
<?php
include('headfooter.php');
?>

</body>
</html>
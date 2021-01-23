 <?php
   interface rem
   {
    public function rem_depan ();
    public function rem_belakang();
    }
    class motor implements rem{
      public function rem_depan(){
        return "rem depan...";
      }
      public function rem_belakang(){
        return "rem belakang...";
       }
    }
    
    $motor_baru = new motor ();
    echo $motor_baru-> rem_depan();
    // rem depan
    
    ?>
   
   
   
   
   
   
   

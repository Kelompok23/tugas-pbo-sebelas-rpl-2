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
    //fatal eror : class contain 1 abstarct method
    //and must therefore be declarated abstract
    //or implement the remaining method (mouse ::klik_kiri)
    ?>
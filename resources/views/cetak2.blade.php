
<style>
    body{
        color: black;
        font-size:20px ;
        font-weight: bold;
        font-family: Arial;font-size: 12px;
    }
    table{
        color: black;
        font-size:20px ;
        font-weight: bold;
        font-family: Arial;font-size: 12px;
    }
</style>
<body style="
 padding-left: 100px;  padding-top: 30px;padding-bottom: -40px;">
<div style=" float: left;  padding-left: 30px; width: 550px;height: 350px; border-left: 2px dashed red;">
<div style=" margin-left: 0px;  float: left;  margin-right: 30px; margin-top:-4px;width: 550px;height: 350px;margin-bottom: 6px;background-size: 550px 350px;
    background-image: url({{ asset('desain/32/depan.png') }});
    ">

           
               
                
            </div>
        </div>
        
        

<div style="float: left; 
    margin-right: 30px;  margin-left: 30px;
     margin-top:-4px;width: 550px;height: 350px;margin-bottom: 6px;background-size: 550px 350px;
     background-image: url({{ asset('desain/32/belakang.png') }});/
     ">
        <div style="background-color:white; border: px solid white; border-radius: 5px; position: absolute;margin-left: 330px;margin-top: 129px; overflow: hidden;" class="img-responsive img" >
            {!! QrCode::size(110)->generate('coba') !!}
        </div>

    {{-- <div style="display: block; position: absolute;margin-left: 220px;margin-top: <?php echo $data_user->dikeluarkan_atas; ?>px; line-height: 15px; width: 220px;height:35px;text-align:left; font-size: 10px; font-weight: normal!important; position: left;float: left">
                   </div> --}}

                

           

            </div>

</body>
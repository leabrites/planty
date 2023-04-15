<?php
?>
<style>
    .footer{
    width:100%;
    height: 67px;
    background-color:#fff;
    position:fixed;
    bottom:0%;
    left:0%;
    text-align:center;
}

    .mentions{ 
    position: center;
    font-family:'Syne';
    color:black;
    text-decoration: none;

    }
    </style>

<!DOCTYPE html>
<html>
    <body>
        <footer class="footer">
          <nav>
            <div>
                    <a class="mentions" href="<?php echo home_url('/Mentions légales'); ?>">Mentions légales</a>
            </div> 
          </nav>
        </footer>
    </body>


<div name="admin" class="wow fadeInUp content-card" style="margin-top: 0;">
        <span class="text-subtitle" style="font-size: 2em; font-weight: 300; color: #333">Brogue TV Controls (Orignal NeTV).
    </span>
            <br>
            <!-- form -->
            <form method="post" action="sender.php">
              <!-- b sky b -->   <h5>Sky Broadcasting</h5>         
              <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="stl"><!-- sky top left -->
                <input type="radio" id="stl" class="mdl-radio__button" name="eXternal" value="stl">
                <span class="mdl-radio__label">Sky Glass (Top Left)
                </span>
              </label><br>
              <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="str"><!-- sky top right -->
                <input type="radio" id="str" class="mdl-radio__button" name="eXternal" value="str">
                <span class="mdl-radio__label">Sky Glass (Bottom Right)
                </span>
              </label><br>
              <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="sbl"><!-- sky bottom left -->
                <input type="radio" id="sbl" class="mdl-radio__button" name="eXternal" value="sbl">
                <span class="mdl-radio__label">Thin Border + Sky Glass
                </span>
              </label><br>
              <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="sbr"><!-- sky bottom right -->
                <input type="radio" id="sbr" class="mdl-radio__button" name="eXternal" value="sbr">
                <span class="mdl-radio__label">Thick Border + Sky Glass
                </span>
              </label><br>
                <!-- bt sport -->   <h5>BT Sport</h5>         
              <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="btred"><!-- bt red -->
                <input type="radio" id="btred" class="mdl-radio__button" name="eXternal" value="btred">
                <span class="mdl-radio__label">BT Glass Red (Bottom Right)
                </span>
              </label><br>        
              <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="bttl"><!-- bt top left -->
                <input type="radio" id="bttl" class="mdl-radio__button" name="eXternal" value="bttl">
                <span class="mdl-radio__label">BT Glass Clear
                </span>
              </label><br>
              <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="bttr"><!-- bt top right -->
                <input type="radio" id="bttr" class="mdl-radio__button" name="eXternal" value="bttr">
                <span class="mdl-radio__label">Thin Border + BT Glass Red
                </span>
              </label><br>
              <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="btbl"><!-- bt bottom left -->
                <input type="radio" id="btbl" class="mdl-radio__button" name="eXternal" value="btbl">
                <span class="mdl-radio__label">Thin Border + BT Glass Clear
                </span>
              </label><br>
              <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="btbr"><!-- bt bottom right -->
                <input type="radio" id="btbr" class="mdl-radio__button" name="eXternal" value="btbr">
                <span class="mdl-radio__label">Thick Border + BT Glass Clear
                </span>
              </label><br>    <h5>Fun & Alternatives </h5>  
                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                            <input name="squigbubble" class="mdl-textfield__input" type="text">
                            <label class="mdl-textfield__label" for="squigbubble">Bubble Text (current: "<?php include "external/squig.txt";?>")
                </label>
                        </div><br>
              <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="uncle">
                <input type="radio" id="uncle" class="mdl-radio__button" name="eXternal" value="uncle">
                <span class="mdl-radio__label">Uncle Squig (Bubble Enabled)
                </span>
              </label> <br>
              <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="unclealt">
                <input type="radio" id="unclealt" class="mdl-radio__button" name="eXternal" value="unclealt">
                <span class="mdl-radio__label">Uncle Squig (Alternative - I Love Florian Tshirt)
                </span>
              </label> <br>
              <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="florian">
                <input type="radio" id="florian" class="mdl-radio__button" name="eXternal" value="florian">
                <span class="mdl-radio__label">Florian (Bubble Enabled)
                </span>
              </label><br>  
              <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="sarahjane">
                <input type="radio" id="sarahjane" class="mdl-radio__button" name="eXternal" value="sarahjane">
                <span class="mdl-radio__label">Sarah-Jane (Bubble Enabled)
                </span>
              </label><br>  
              <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="katie">
                <input type="radio" id="katie" class="mdl-radio__button" name="eXternal" value="katie">
                <span class="mdl-radio__label">Katie (Bubble Enabled)
                </span>
              </label><br>    
              <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="trevor">
                <input type="radio" id="trevor" class="mdl-radio__button" name="eXternal" value="trevor">
                <span class="mdl-radio__label">Trevor (Bubble Enabled)
                </span>
              </label><br>     
              <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="natdanflo">
                <input type="radio" id="natdanflo" class="mdl-radio__button" name="eXternal" value="natdanflo">
                <span class="mdl-radio__label">Natalie, Daniel, Florian (Bubble Enabled)
                </span>
              </label><br>     
              <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="bartdanny">
                <input type="radio" id="bartdanny" class="mdl-radio__button" name="eXternal" value="bartdanny">
                <span class="mdl-radio__label">Bart, Squig, Danny (Bubble Enabled)
                </span>
              </label><br>  
              <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="saturday">
                <input type="radio" id="saturday" class="mdl-radio__button" name="eXternal" value="saturday">
                <span class="mdl-radio__label">Saturday (DJ Massive - head upstairs) 
                </span>
              </label><br> 
              <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="karaoke">
                <input type="radio" id="karaoke" class="mdl-radio__button" name="eXternal" value="karaoke">
                <span class="mdl-radio__label">Karaoke 
                </span>
              </label><br> 
              <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="border">
                <input type="radio" id="border" class="mdl-radio__button" name="eXternal" value="border">
                <span class="mdl-radio__label">Black Border (Solo - Thin)
                </span>
              </label><br>
              <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="border2">
                <input type="radio" id="border2" class="mdl-radio__button" name="eXternal" value="border2">
                <span class="mdl-radio__label">Black Border (Solo - Thick)
                </span>
              </label><br> <h5>Config</h5>
              <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="ticker">
                <input type="radio" id="ticker" class="mdl-radio__button" name="eXternal" value="ticker">
                <span class="mdl-radio__label">Load Ticker
                </span>
              </label><br>
              <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="grid">
                <input type="radio" id="grid" class="mdl-radio__button" name="eXternal" value="grid">
                <span class="mdl-radio__label">Alignment Grid
                </span>
              </label><br>
              <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="disableka">
                <input type="radio" id="disableka" class="mdl-radio__button" name="eXternal" value="disableka">
                <span class="mdl-radio__label">Disable KeepAlive timer
                </span>
              </label><br>
              <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="clear">
                <input type="radio" id="clear" class="mdl-radio__button" name="eXternal" value="clear">
                <span class="mdl-radio__label">Turn Off Graphics
                </span>
              </label><br>
              <br>  
              <br>  
              <br> 
              <br>
              <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect" type="submit" >
                Submit
              </button>
            </form>
            <div>
              <br>
              
                </span>
              </span>
            </div>
            </div>




                  <div class="wow fadeInUp content-works"> 
      </div>


<div name="admin" class="wow fadeInUp content-card" style="margin-top: 0;">
        <span class="text-subtitle" style="font-size: 2em; font-weight: 300; color: #333">Box 2 Control 
    </span>
            <br>
            <!-- form -->
            <form method="post" action="sender.php">
              <!-- b sky b -->   <h5>Sky Broadcasting</h5>         
              <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="2stl"><!-- sky top left -->
                <input type="radio" id="2stl" class="mdl-radio__button" name="eXternal" value="2stl">
                <span class="mdl-radio__label">Sky Glass (Top Left)
                </span>
              </label><br>
              <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="2str"><!-- sky top right -->
                <input type="radio" id="2str" class="mdl-radio__button" name="eXternal" value="2str">
                <span class="mdl-radio__label">Sky Glass (Bottom Right)
                </span>
              </label><br>
              <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="2sbl"><!-- sky bottom left -->
                <input type="radio" id="2sbl" class="mdl-radio__button" name="eXternal" value="2sbl">
                <span class="mdl-radio__label">Thin Border + Sky Glass
                </span>
              </label><br>
              <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="2sbr"><!-- sky bottom right -->
                <input type="radio" id="2sbr" class="mdl-radio__button" name="eXternal" value="2sbr">
                <span class="mdl-radio__label">Thick Border + Sky Glass
                </span>
              </label><br>
                <!-- bt sport -->   <h5>BT Sport</h5>         
              <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="2btred"><!-- bt red -->
                <input type="radio" id="2btred" class="mdl-radio__button" name="eXternal" value="2btred">
                <span class="mdl-radio__label">BT Glass Red (Bottom Right)
                </span>
              </label><br>        
              <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="2bttl"><!-- bt top left -->
                <input type="radio" id="2bttl" class="mdl-radio__button" name="eXternal" value="2bttl">
                <span class="mdl-radio__label">BT Glass Clear
                </span>
              </label><br>
              <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="2bttr"><!-- bt top right -->
                <input type="radio" id="2bttr" class="mdl-radio__button" name="eXternal" value="2bttr">
                <span class="mdl-radio__label">Thin Border + BT Glass Red
                </span>
              </label><br>
              <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="2btbl"><!-- bt bottom left -->
                <input type="radio" id="2btbl" class="mdl-radio__button" name="eXternal" value="2btbl">
                <span class="mdl-radio__label">Thin Border + BT Glass Clear
                </span>
              </label><br>
              <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="2btbr"><!-- bt bottom right -->
                <input type="radio" id="2btbr" class="mdl-radio__button" name="eXternal" value="2btbr">
                <span class="mdl-radio__label">Thick Border + BT Glass Clear
                </span>
              </label><br>
              <br>  
              <br>
              <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect" type="submit" >
                Submit
              </button>
            </form>
            <div>
              <br>
              
                </span>
              </span>
            </div>
            </div>




                  <div class="wow fadeInUp content-works"> 
      </div>

<?php if(!class_exists('Rain\Tpl')){exit;}?>    <div class="row">
                        <div class="col-xs-12 col-md-12 col-lg-12 allcp-grid ">


                        <div class="panel of-h" id="spy1">
                                <div class="panel-heading br-b-o w-mt-15">
                                    <span class="panel-title">Mining Info</span>
                                      </div>
                                <div class="panel-body pn mt25 lead">
                                   <h4>Pool Address: http://aropool.com</h4>
                                   <h4>Pool Fee: 2%</h4>
				   <h4>Min Payment: 3 ARO</h4>
				   <h4>Block confirmation: 10 blocks</h4>
 				<h4>Reward split: 40% miner, 30% current shares, 30% historic shares</h4>

         <br><br>


        <h4>How to mine:</h4>
<h5>Windows</h5>
                                    <p class="text-md-left">In order to mine on our pool, you will need to download the Arionum Wallet from <a href="https://www.arionum.com">arionum.com</a></p>
				<p>Install the LightArionum app, search for the integrated "Miner" tab and click "Start Mining". This is all, you are now mining on our pool!</p>
<p>If you are a power user and you would like to get maximum mining performance, you should use Dan's java miner which is available <A href="https://github.com/ProgrammerDan/arionum-java/releases">here</a>.
<br>
<iframe width="1280" height="720" src="https://www.youtube.com/embed/xSGIn6kCFrk" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
<br>
<br>
<h5>Linux/Mac</h5>
<p>Under linux and mac, we recommend using Dan's java Miner, which is available <A href="https://github.com/ProgrammerDan/arionum-java/releases">here</a>.</p> 
<p>A full guide can be found on the above url.</p>


<br><br><br><br><Br>
	<h4>How to mine: (old version)</h4>
                                    <p class="text-md-left"> In order to mine on our pool you will need to first create a wallet. You can download our bundled miner + cli wallet from <a href="https://www.arionum.com/files/ArionumWin.zip">here</a>.</p>
                                    <p>Extract the archive exactly in c:\, it is absolutely necessary that the files are located in this directory as php has absolute paths.</p>
				    <p>Download and install the windows openssl binaries located <a href="https://slproweb.com/download/Win64OpenSSL_Light-1_1_0g.exe">here</a> (x64 light version). <strong>After the installation it's necessary to reboot the computer!</strong>
				    <p>The Windows version on your computer must be installed using the x64 architecture</p>
                                    <p>Run the file Start-Wallet.bat, enter "balance" as the first command and follow the on-screen instructions. Copy your wallet address when printed.</p>
                                    <p>Edit Auto-Miner.bat and replace CHANGE-ADDRESS with the address generated above.</p>
                                    <p>Execute Auto-Miner.bat and it should start mining on our pool. </p>
                                    <p>The miner uses by default 4 cores. If you'd like to mine with more cores, simply start the Auto-Miner.bat again.</p>
<br>
				    <p>In case you get an error regarding a missing DLL, you will need the Microsoft Visual C++ Runtime package. This can be done downloaded here: <a href="https://www.microsoft.com/en-us/download/details.aspx?id=48145">https://www.microsoft.com/en-us/download/details.aspx?id=48145></a>
                                    <br><br>
<strong>For linux:</strong>
<p>Install php 7.2 and php-gmp</p>
<p>Download the latest miner from <a href="https://github.com/arionum/miner">https://github.com/arionum/miner</a></p>
<p>Change permissions to 755: chmod 755 miner</p>
<p>Run it in the format: ./miner pool http://aropool.com <YOUR-ADDRESS>  (replace YOUR-ADDRESS with your actual address)</p>


                                </div>
                            </div>
                        
</div>
</div>

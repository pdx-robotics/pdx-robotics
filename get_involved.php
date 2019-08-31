<?php include './parts/head.php';
  head($title='Get Involved - Viking Robotics Society');
?>
<div id="heading" >
    <h1>Get Involved</h1>
</div>

<!-- Main -->
<section id="main" class="wrapper">

    <div class="inner">
    <!-- Content -->
        <p>
        No experience in robotics or very experienced, we welcome everyone to join us 
        in our activities. Students of any major and people of the community can 
        join our group to learn more about robotics by working on projects and 
        participating in workshops. 
        </p>
        <h2 id="content">Joining the Society</h2>
        <p>
        Attend one of our meetings and introduce yourself to us! We have
        monthly meetings on the first Friday of every month. We also
        have weekly tinkering sessions to sit down and work on
        projects. You can see when they are on our home page.
        </p>
        <p>
        You can contact us to hear more about our tinkering sesions by
        emailing us at <b><u>robotics@pdx.edu</u></b> or get on our
        Discord server to talk to someone.
        To join us formally, please look at the list below.
        </p>
        <ol>
            <li>Let us know more about you by filling out the <a href="https://goo.gl/forms/AUXMLsyf38IpIoJW2">New Member Form</a></li>
            <li><a href="https://orgsync.com/85238/chapter">Join us on OrgSync</a></li>
            <li>Let us know how often you're available on a weekly basis
                so we can plan meetings and events for everyone. Links
                are in the table below
            </li>
        </ol>   
        <?php include"./parts/availability_table.html";?>
        <br> <!-- Line Break -->


    <!-- Discord Server Information -->
        <h2>Chat with us on Discord</h2>
        <div class="row">
            <div class="col-6 col-12-medium">
                <p>Join our Discord chat server and come talk with members of the society!</p>
                <ol type="a">
                    <li>
                        <b>Make an account on Discord.</b> Please note that the widget to the side makes a new temporary account
                        everytime, so be sure to access Discord through the client or browser.
                        <ul>
                            <li><a href="https://discordapp.com/download">Download the Discord Client</a>. It's available on PC, Mac, Android, iOS, and Linux.</li>
                            <li>If you don't want to download, you can also access it through a browser: <a href="https://discordapp.com/">Discord</a></li>
                        </ul>
                    </li>
                    <li>Use this invitation code to join our server: <a href="https://discord.gg/umrxuvg">umrxuvg</a>
                        <!-- This adds a bit of whitespace to make it consistent with the other list items -->
                        <ul></ul>
                    </li>
                    <li><b>Change your nickname</b> to your real name so we can identify you in the server.
                        <ul>
                            <li>Find your username in the members list</li>
                            <li>Right-click your username and go to "<b>Change Nickname</b>"</li>
                            <li>Type your name in and click "Save"</li>
                        </ul>
                    </li>
                    <li><b>Modify your Notification Settings.</b> The server
                        is set to only give a notification when you are
                        mentioned. 
                        <ul>
                            <li>Right-click the server icon in the
                                server list (to the left)</li>
                            <li>Go to "Notification Settings"</li>
                            <li>Add "Notification Overrides" as desired</li>
                        </ul>
                    </li>
                </ol>
            </div>
            <div class="col-6 col-12-medium">
                <iframe 
                    src="https://discordapp.com/widget?id=404333712378036227&theme=dark" 
                    width="350" 
                    height="550" 
                    class="discord-widget">
                </iframe>
            </div>
        </div>
    </div>

    <!-- Scripts -->
	<script src="/assets/js/jquery.min.js"></script>
	<script src="/assets/js/browser.min.js"></script>
	<script src="/assets/js/breakpoints.min.js"></script>
	<script src="/assets/js/util.js"></script>
    <script src="/assets/js/main.js"></script>
    
</section>
<?php include "/parts/footer.html";?>
</body>
</html>

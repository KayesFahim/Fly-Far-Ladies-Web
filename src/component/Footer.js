import React from 'react';

class Footer extends React.Component {
    constructor(props) {
        super(props);
    }
    state = {  }
    render() { 
        return ( 
            <footer>
            <div class="container">
                <div class="footer-flex">
                    <article class="left">
                        <label>Ready For Your Next Adventure?</label>
                        <ul>
                            <li>
                                <input name="ctl00$txtfname" type="text" id="txtfname" placeholder="First Name.." />
                            </li>
                            <li>
                                <input name="ctl00$txtlastname" type="text" id="txtlastname" placeholder="Last Name.." />
                            </li>
                            <li>
                                <input name="ctl00$txtemail" type="text" id="txtemail" placeholder="Email ID.." />
                            </li>
                            <li>
                                <input name="ctl00$txtcont" type="text" id="txtcont" placeholder="Contact No." />
                            </li>
                            <li>
                                <input name="ctl00$txtdate" type="text" id="txtdate" placeholder="Travel Date.." />
                            </li>
                            <li>
                                <input name="ctl00$txtnuofp" type="text" id="txtnuofp" placeholder="Number of People.." />
                            </li>
                            <li>
                                <input name="ctl00$txtabout" type="text" id="txtabout" placeholder="Tell us about your dream adventure.." />
                            </li>
                            <li><a>
                                <input type="submit" name="ctl00$btnsubmit" value="Submit" id="btnsubmit" class="btntoursubmit" /></a> </li>
                        </ul>
                    </article>

                    <article class="middel">
                        <label>Quick Links</label>
                        <ul>

                            <li><a href="index.aspx">Home </a></li>
                            <li><a href="about-us">About us </a></li>
                            <li><a href="contact-us">Contact Us </a></li>
                            <li><a href="terms-and-conditions">Terms and Conditions</a></li>
                            <li><a href="privacy-policy">Privacy Policy</a></li>
                            <li><a href="refund-policy">Refund Policy</a></li>
                            
                            
                        </ul>
                    </article>

                    <article class="right">
                        
                        <label>Social With Us</label>
                        <div class="social-icons">
                            <a href="https://www.facebook.com/flyfarladies/" target="_blank">
                                <img src="images/home/facebook.png" alt="facebook"/></a>
                            <a href="https://www.youtube.com/c/FlyFarLadies" target="_blank">
                                <img src="images/home/youtube.png" alt="youtube"/></a>
                            <a href="https://www.instagram.com/flyfarladies/" target="_blank">
                                <img src="images/home/instagram.png" alt="instagram" /></a>
                            <a href="https://twitter.com/FlyfarLadies" target="_blank">
                                <img src="images/home/twitter.png" alt="twitter"/></a>
                            <a href="https://www.linkedin.com/in/fly-far-ladies-48780a1ab/" target="_blank">
                                <img src="images/home/in.png" alt="in"/></a>
                        </div>
                    </article>
                </div>
            </div>
            <div class="copyright">
                <p>Copyright © FlyFarLadies 2021, All Rights Reserved.</p>
            </div>
        </footer>
         );
    }
}
 
export default Footer;
import React from 'react';

class Blog extends React.Component {
    constructor(props) {
        super(props);
    }
    state = {  }
    render() { 
        return ( 
            <section class="from-our-blog">
                <div class="container">
                    <div class="restaurants-detail">
                        <div class="heading">From Our Blog</div>
                        

                        <div class="bloglist">
                            <div class='box'>
                               
                                    
                                <div class='content-box'>
                                    
                                </div>
                            </div>
                            <div class='box'>
                                
                                    
                               
                                <div class='content-box'>
                                    
                                </div>
                            </div>

                        </div>

                        
                    </div>

                    <div class="newsletter-info">
                        <div class="title">Newsletter</div>
                        <p></p>

                        <div class="input-box ">
                            <input name="ctl00$ContentPlaceHolder1$txtname" type="text" id="ContentPlaceHolder1_txtname" placeholder="Name*" />
                        </div>
                        <div class="input-box">
                            <input name="ctl00$ContentPlaceHolder1$txtcompany" type="text" id="ContentPlaceHolder1_txtcompany" placeholder="Company" />
                        </div>
                        <div class="input-box">
                            <input name="ctl00$ContentPlaceHolder1$txtemail" type="text" id="ContentPlaceHolder1_txtemail" placeholder="E-mail*" />
                        </div>
                        <div class="input-box">
                            <input name="ctl00$ContentPlaceHolder1$txtweburl" type="text" id="ContentPlaceHolder1_txtweburl" placeholder="Website" />
                        </div>
                        <input type="submit" name="ctl00$ContentPlaceHolder1$btnnewslater" value="Subscribe" id="ContentPlaceHolder1_btnnewslater" class="subscribe-btn" />
                        
                    </div>

                </div>
            </section>
         );
    }
}
 
export default Blog;
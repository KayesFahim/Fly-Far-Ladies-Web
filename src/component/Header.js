import React from "react";


class Header extends React.Component {
    constructor(props) {
        super(props);
    }
    state = {  }
    render() { 
        return (  

            <div>
            <section class="header-top">
            <div class="container">

                <ul>
                    <li>

                        <a href="#">
                            <img src="asset/call.png" alt="call" />
                            <span>01755582111, info@flyfarladies.com</span></a>
                    </li>


                    <li id="hidelogin" class="right">
                        

                        <a href="">Login / Register</a>
                        
                        

                        <a href="#" class="cart">
                            <img src="asset/cart.svg" alt="cart" /></a>

                    </li>

                </ul>
                
            </div>
        </section>
               
            </div>


        );
    }
}
 
export default Header;
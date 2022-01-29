import React from 'react';

class StackPhoto extends React.Component {
    constructor(props) {
        super(props);
    }
    state = {  }
    render() { 
        return ( 
            <section class="most-popular-tours" id="stockimage">
                <div class="container">
                    <h2 class="heading">Stock Images</h2>
                    <p id="ContentPlaceHolder1_stockimagetext" class="intext">The best source of tour stock image in Bangladesh. We collect pictures by professionals.  Check which images are perfect for you.</p>

                    <ul class="stock-slider">
                        <li>
                            Image 1
                        </li>
                        <li>
                            Image 3
                        </li>
                        <li>
                            Image 4
                        </li>
                        <li>
                            Image 3
                        </li>                       
                    </ul>
                    <p class="stockimagebrowes"><a href="stockgallery.aspx">Browes all Stock Images</a></p>
                </div>
            </section>
         );
    }
}
 
export default StackPhoto;
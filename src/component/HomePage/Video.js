import React from 'react';


class Video extends React.Component {
    constructor(props) {
        super(props);
    }
    state = {  }
    render() { 
        return ( 
            <section class="video-section">
                <div class="container">

                    <a class="video-button videobutton">
                        <img src="images/video.svg" alt="flyfar-video" />
                    </a>
                    <h2 class="heading">Watch Video</h2>
                </div>
            </section>
         );
    }
}
 
export default Video;
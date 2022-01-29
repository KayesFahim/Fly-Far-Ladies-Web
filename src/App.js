import './App.css'
import Banner from './component/HomePage/Banner'
import PropularTour from './component/HomePage/PropularTour'
import Header from './component/Header'
import TopNavBar from './component/TopNavBar'
import Video from './component/HomePage/Video'
import JobSection from './component/HomePage/JobSection'
import StackPhoto from './component/HomePage/StackPhoto'
import Blog from './component/HomePage/Blog'
import Footer from './component/Footer'

function App() {
  return (
    <div>
      <Header/>
        <TopNavBar/>
        <Banner/>
        <PropularTour/>
        <Video/>
        <JobSection/>
        <StackPhoto/>
        <Blog/>
      <Footer/>
    </div>
  );
}

export default App;

import Card from "./components/Card";
import Firstcomp from "./components/Firstcomp";

function abc() {
  return "ABC";
}

function App() {
  const cardData = {
    imgURL:
      "https://dfstudio-d420.kxcdn.com/wordpress/wp-content/uploads/2019/06/digital_camera_photo-1080x675.jpg",
    cardTitle: "This is my first Card",
    cardPara:
      "Some quick example text to build on the card title and make up the bulk of the card's content.",
  };

  return (
    <>
      <h1>Hello world</h1>

      <Card cardData={cardData} />
    </>
  );
}

export default App;

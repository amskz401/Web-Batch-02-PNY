import { useState } from "react";
import FlagOpr from "./components/FlagOpr";
import Ifelse from "./components/Ifelse";
import MapOpr from "./components/MapOpr";
import Ternary from "./components/Ternary";
import Button from "./components/Button";

function App() {
  let [count, setCount] = useState(0);
  let [name, setName] = useState("");
  console.log(count);
  const callMe = () => {
    ++count;
    setCount(count);
    console.log(`Button Clicked ${count}`);
  };

  const getInputVal = (input) => {
    console.log(input.target.value);
    setName(input.target.value);
  };
  return (
    <>
      {/* <Ifelse /> */}
      {/* <Ternary></Ternary> */}
      {/* <FlagOpr></FlagOpr> */}
      {/* <MapOpr></MapOpr> */}
      <button onClick={() => callMe()}>Click Me {count}</button>
      <br />
      <input type="text" onChange={() => getInputVal(event)} />
      <br />
      {name}
    </>
  );
}
export default App;

import React, { useContext } from "react";
import myContext from "./ContextApi";

export default function Comp() {
  const valueFromContext = useContext(myContext);
  console.log(valueFromContext.app_name);
  return (
    <div>
      <h1>In Component {valueFromContext.app_name}</h1>
    </div>
  );
}

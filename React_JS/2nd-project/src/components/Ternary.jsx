import React from "react";

export default function Ternary() {
  const val = 10;
  return <div>{val == 10 ? <h1>value {val}</h1> : <h1>value: {val}</h1>}</div>;
}

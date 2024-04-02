import React from "react";

export default function Button() {
  return (
    <div>
      <button onClick={() => callMe()}>Click Me {count}</button>
    </div>
  );
}

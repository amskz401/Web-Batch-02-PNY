import React from "react";

export default function Cardimg({ imgURL }) {
  return (
    <>
      <img src={imgURL} className="card-img-top" alt="..." />
    </>
  );
}

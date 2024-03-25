import React from "react";
import Cardimg from "./Cardimg";
import Cardtitle from "./Cardtitle";
import Cardtext from "./Cardtext";

export default function Card({ cardData }) {
  return (
    <>
      <div className="card">
        <Cardimg imgURL={cardData.imgURL} />
        <div className="card-body">
          <Cardtitle cardTitle={cardData.cardTitle} />
          <p className="card-text">
            <Cardtext cardText={cardData.cardPara} />
          </p>
          <a href="#" className="btn btn-primary">
            Go somewhere
          </a>
        </div>
      </div>
    </>
  );
}

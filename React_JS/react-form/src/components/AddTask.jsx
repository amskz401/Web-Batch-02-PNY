import React from "react";
import { GrAdd } from "react-icons/gr";

export default function AddTask({ passInputValue, getInputVal }) {
  const getInput = (input) => {};
  return (
    <div className="row">
      <div className="col-md-4 mx-auto mt-5">
        <form>
          <div className="form-group">
            <div className="input-group mb-3">
              <input
                type="text"
                className="form-control"
                placeholder="Add New Task"
                aria-label="Recipient's username"
                aria-describedby="basic-addon2"
                onChange={() => getInputVal(event.target.value)}
              />
              <span
                className="input-group-text btn btn-success"
                id="basic-addon2"
                onClick={() => passInputValue()}
              >
                <GrAdd />
              </span>
            </div>
          </div>
        </form>
      </div>
    </div>
  );
}

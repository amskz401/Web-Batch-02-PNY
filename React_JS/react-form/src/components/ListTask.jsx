import React from "react";

import Task from "./Task";

export default function ListTask({ taskList, deleteTask }) {
  return (
    <>
      <div className="row">
        <div className="col-md-8 mx-auto">
          <div className="card">
            <div className="card-header">
              <strong>Task List</strong>
            </div>
            <ul className="list-group list-group-flush">
              {taskList.map((task) => (
                <Task task={task} />
              ))}
            </ul>
          </div>
        </div>
      </div>
    </>
  );
}

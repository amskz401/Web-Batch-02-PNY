import React from "react";
import { BsFillTrash3Fill } from "react-icons/bs";

export default function Task({ task }) {
  return (
    <>
      <li className="list-group-item">
        {task.title}
        <span
          className="btn btn-danger"
          style={{ float: "right" }}
          onClick={() => deleteTask(task.id)}
        >
          <BsFillTrash3Fill />
        </span>
      </li>
    </>
  );
}

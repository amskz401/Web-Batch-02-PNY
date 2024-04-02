import React, { useReducer, useRef, useState } from "react";
import { DragDropContext, Draggable, Droppable } from "react-beautiful-dnd";

// const taskList = { taskList: [] };
// const reducer = (state, action) => {
//   if (action.type === "add_task") {
//     console.log(state);
//     return { taskList: "one" };
//   }
// };

export default function TaskList() {
  //   const [state, disptach] = useReducer(reducer, taskList);
  //   //   const [task, setTask] = useState([]);
  //   console.log(state.taskList);
  const inputVal = useRef();
  //   const inputTask = () => {
  //     const newTask = inputVal.current.value;
  //     disptach({ value: newTask, type: "add_task" });

  //     //   const newTaskList = [...task, newTask];
  //     //   setTask(newTaskList);
  //     inputVal.current.value = "";
  //   };

  //   const deleteTask = (index) => {
  //     console.log(index);
  //   };

  const [taskList, setTaskList] = useState([
    {
      id: 1,
      task: "one",
    },
    {
      id: 2,
      task: "two",
    },
    {
      id: 3,
      task: "three",
    },
  ]);

  const handleOnDragEnd = (output) => {
    console.log(output);
  };
  return (
    <>
      <div className="container">
        <div className="row mt-5">
          <div className="col-md-12 mx-auto">
            <div className="input-group mb-3">
              <input
                type="text"
                className="form-control"
                placeholder="Add New Task"
                aria-describedby="basic-addon2"
                ref={inputVal}
              />
              <span
                className="input-group-text btn btn-success"
                onClick={() => inputTask()}
                id="basic-addon2"
              >
                <i className="bi bi-pencil"></i>
              </span>
            </div>
          </div>
        </div>
        <DragDropContext onDragEnd={handleOnDragEnd}>
          <Droppable droppableId="taskList">
            {(provided) => (
              <div
                className="row"
                {...provided.droppableProps}
                ref={provided.innerRef}
              >
                <div className="col-md-12">
                  <div className="card">
                    <div className="card-header">
                      <h3>Task List</h3>
                    </div>
                    <ul className="list-group list-group-flush">
                      {taskList.map((t, ind) => (
                        <Draggable
                          key={ind}
                          index={ind}
                          draggableId={t.id.toString()}
                        >
                          {(provided) => (
                            <li
                              key={t.id}
                              className="list-group-item"
                              ref={provided.innerRef}
                              {...provided.draggableProps}
                              {...provided.dragHandleProps}
                            >
                              {t.task}
                              <span
                                style={{ float: "right" }}
                                className="btn btn-danger"
                                onClick={() => deleteTask(ind)}
                              >
                                <i className="bi bi-arrow-right-square-fill"></i>
                              </span>
                            </li>
                          )}
                        </Draggable>
                      ))}
                    </ul>
                  </div>
                </div>
              </div>
            )}
          </Droppable>
        </DragDropContext>
      </div>
    </>
  );
}

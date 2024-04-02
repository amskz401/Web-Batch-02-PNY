import { useState } from "react";
import AddTask from "./components/AddTask";
import Header from "./components/Header";
import ListTask from "./components/ListTask";

function App() {
  const [taskList, setTaskList] = useState([]);
  const [task, setTask] = useState("");

  const getInputVal = (input) => {
    setTask(input);
  };

  const passInputValue = () => {
    // console.log(task);
    let newTask = {
      id: Math.ceil(Math.random() * 10),
      title: task,
    };
    setTaskList([...taskList, newTask]);
  };

  const deleteTask = (id) => {
    let newTaskList = taskList.filter((task) => task.id != id);
    setTaskList(newTaskList);
  };
  return (
    <>
      <Header></Header>
      <AddTask
        getInputVal={getInputVal}
        passInputValue={passInputValue}
      ></AddTask>
      <hr />
      <ListTask taskList={taskList} deleteTask={deleteTask}></ListTask>
    </>
  );
}

export default App;

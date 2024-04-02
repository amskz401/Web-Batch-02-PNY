import { Outlet } from "react-router-dom";
import Header from "./components/Header";
import TaskList from "./components/TaskList";
import myContext from "./components/ContextApi";

function App() {
  const obj = {
    id: 2,
    app_name: "Task List",
  };
  return (
    <myContext.Provider value={obj}>
      <Header></Header>
      <TaskList></TaskList>
      <Outlet></Outlet>
    </myContext.Provider>
  );
}

export default App;

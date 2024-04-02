import React from "react";
import ReactDOM from "react-dom/client";
import App from "./App.jsx";
import "bootstrap/dist/css/bootstrap.min.css";
import "bootstrap-icons/font/bootstrap-icons.min.css";
import { createBrowserRouter, RouterProvider } from "react-router-dom";
import Login from "./components/Login.jsx";
import Register from "./components/Register.jsx";

const routes = createBrowserRouter([
  {
    path: "/",
    element: <App></App>,
    children: [
      { path: "login", element: <Login></Login> },
      { path: "register", element: <Register></Register> },
    ],
  },
]);

ReactDOM.createRoot(document.getElementById("root")).render(
  <RouterProvider router={routes} />
);

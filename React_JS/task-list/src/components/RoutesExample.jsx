import React from "react";
import { BrowserRouter, Route, Routes } from "react-router-dom";

export default function RoutesExample() {
  return (
    <>
      <BrowserRouter>
        <Routes>
          <Route path="/" element={<Header />}>
            <Route path="/login" element={<Login></Login>} />
            <Route path="/register" element={<Register></Register>} />
          </Route>
        </Routes>
      </BrowserRouter>
    </>
  );
}

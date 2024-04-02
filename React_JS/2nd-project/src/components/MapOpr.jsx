import React from "react";

export default function MapOpr() {
  const students = [
    { id: 1, name: "STD1" },
    { id: 2, name: "STD2" },
    { id: 3, name: "STD3" },
  ];
  return (
    <div>
      <ul>
        {students.map((std) => (
          <li>
            {std.id} - {std.name}
          </li>
        ))}
      </ul>
    </div>
  );
}
